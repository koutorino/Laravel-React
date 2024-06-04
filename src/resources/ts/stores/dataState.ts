import { atom } from "recoil";
import { DataType } from "../types/dataType";

export const sampleDataState = atom<DataType>({
  key: "sampleDataState",
  default:
    { id: 0, title: "", content: "", image: "" },
});
